<?php

namespace App\Services;

use App\Mail\NewQuote;
use Exception;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class QuoteService
{
    public const COMPANY_INSURANCE = 'company';
    public const PROPERTY_AND_LIABILITY_INSURANCE = 'property-and-liability';
    public const CARGO_INSURANCE = 'cargo';
    public const LIFE_INSURANCE = 'life';
    public const LIABILITY_INSURANCE = 'liability';
    public const CONDOMINIUM_INSURANCE = 'condominium';
    public const AGRICULTURAL_INSURANCE = 'agricultural';

    /**
     * Handles the new quote submission.
     *
     * @param string $insuranceType The type of insurance.
     * @param array $quoteData The quote data submitted.
     * @return \Illuminate\Http\JsonResponse The response indicating success or failure.
     */
    public static function handleNewQuoteSubmission(string $insuranceType, array $quoteData)
    {
        // Transform data to human readable
        $humanReadableType = self::getHumanReadableInsuranceType($insuranceType);
        $formattedData = self::formatDataToHumanReadable($quoteData);
        $message = 'Initializing data';

        // Send the mail
        $quoteEmail = new NewQuote($humanReadableType, $formattedData);
        $isSuccess = true;
        try {
            Log::info('Sending submission to ' . config('app.recipient'));
            Mail::to(config('app.recipient'))->send($quoteEmail);
            $message = 'Quote sent successfully';
        } catch (Exception $e) {
            Log::error('QuoteService: ' . $e->getMessage());
            Log::error($e->getTraceAsString());

            $isSuccess = false;
        }

        // Log the quote submission
        self::logQuoteSubmission($humanReadableType, $formattedData);

        // Return if email was sent
        return response()->json([
            'message' => $message,
            'success' => $isSuccess,
        ]);
    }

    /**
     * Gets a human-readable version of the insurance type.
     *
     * @param string $insuranceType The type of insurance.
     * @return string The human-readable type.
     */
    public static function getHumanReadableInsuranceType(string $insuranceType)
    {
        switch ($insuranceType) {
            case self::COMPANY_INSURANCE:
                return 'Szakmai Felelősségbiztosítás';
            case self::PROPERTY_AND_LIABILITY_INSURANCE:
                return 'Vagyon- és felelősségbiztosítás';
            case self::CARGO_INSURANCE:
                return 'Szállítmánybiztosítások';
            case self::LIFE_INSURANCE:
                return 'Élet- és Balesetbiztosítások';
            case self::LIABILITY_INSURANCE:
                return 'Felelősségbiztosítás';
            case self::CONDOMINIUM_INSURANCE:
                return 'Társasház Biztosítás';
            case self::AGRICULTURAL_INSURANCE:
                return 'Mezőgazdasági Biztosítás';
            default:
                return $insuranceType . '(Ismeretlen)';
        }
    }

    /**
     * Translates a key using validation attributes.
     *
     * @param string $key The key to translate.
     * @return string The translated key or the original key if not found.
     */
    public static function translateAttributeKey(string $key)
    {
        $translationKey = "validation.attributes.$key";

        if (Lang::has($translationKey, [], 'hu')) {
            return Lang::get($translationKey, [], 'hu');
        }

        return $key;
    }

    /**
     * Transforms data to a human-readable format using translated keys.
     *
     * @param array $data The data to transform.
     * @return array The transformed data with human-readable keys.
     */
    public static function formatDataToHumanReadable(array $data)
    {
        $formattedData = [];

        foreach ($data as $key => $value) {
            $newKey = self::translateAttributeKey($key);
            $formattedData[$newKey] = $value;
        }

        return $formattedData;
    }

    /**
     * Logs the quote submission.
     *
     * @param string $insuranceType The type of insurance.
     * @param array $quoteData The data submitted for the quote.
     * @return void
     */
    private static function logQuoteSubmission(string $insuranceType, array $quoteData)
    {
        $logFile = storage_path('logs/quotes.log');
        $directory = dirname($logFile);

        if (! File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        $lines = [
            sprintf('[%s] Új ajánlatkérés:', now()->format('Y-m-d H:i:s')),
            ' - Tipus: ' . $insuranceType,
            ' - Adatok:',
        ];

        foreach ($quoteData as $key => $value) {
            $lines[] = sprintf(' ---- %s: %s', $key, $value);
        }

        File::append($logFile, implode(PHP_EOL, $lines) . PHP_EOL);
    }
}

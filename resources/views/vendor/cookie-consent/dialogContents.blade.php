<div class="js-cookie-consent cookie-consent fixed bottom-0 inset-x-0 pb-2 z-50">
    <div class="max-w-monday mx-auto px-6">
        <div class="p-4 md:p-2 rounded-lg bg-black/60 backdrop-blur">
            <div class="flex items-center justify-between flex-wrap">
                <div class="max-w-full flex-1 items-center md:w-0 md:inline">
                    <p class="md:ml-3 text-white cookie-consent__message">
                        {!! trans('cookie-consent::texts.message') !!}
                    </p>
                </div>
                <div class="mt-2 flex-shrink-0 w-full sm:mt-0 sm:w-auto">
                    <button class="js-cookie-consent-agree cookie-consent__agree cursor-pointer flex items-center justify-center px-4 py-2 font-semibold rounded-md text-sm text-white bg-monday hover:bg-green-500">
                        {{ trans('cookie-consent::texts.agree') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

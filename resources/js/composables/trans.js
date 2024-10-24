import { usePage } from "@inertiajs/vue3";

export function useTrans(value) {
    const translations = usePage().props.translations;

    // Split the key by dot notation to handle nested keys
    const keys = value.split('.');
    let result = translations;

    // Navigate through the keys
    for (const key of keys) {
        if (result && key in result) {
            result = result[key];
        } else {
            // If the key is not found, return a placeholder
            return '!' + value; // or you could return a default translation
        }
    }

    return result !== null ? result : '!' + value;
}

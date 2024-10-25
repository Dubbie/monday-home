import { useForm } from '@inertiajs/vue3';
import { toRefs } from 'vue';

export function useFormHandler(initialData) {
    const form = useForm(initialData);

    const updateFormData = (newFormData) => {
        Object.keys(newFormData).forEach((key) => {
            form[key] = newFormData[key];
        });
    };

    return {
        ...toRefs(form),
        form, // reactive form data
        updateFormData,
    };
}

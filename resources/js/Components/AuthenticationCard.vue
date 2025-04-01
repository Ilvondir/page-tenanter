<script>
import {setLocale} from "matice";
import {defineComponent} from "vue";
import LanguageDropdown from "@/Components/LanguageDropdown.vue";

export default defineComponent({
    components: {LanguageDropdown}
})


if (localStorage.getItem('locale')) {
    setLocale(localStorage.getItem('locale'));
}
</script>

<template>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <slot name="logo"/>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="text-end">
                <LanguageDropdown/>
            </div>

            <slot/>
        </div>
    </div>
</template>

<script setup>
import LangFlag from 'vue-lang-code-flags';
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import {__, setLocale, getLocale} from "matice";
import NavLink from "@/Components/NavLink.vue";


const languages = {
    pl: 'Polish',
    en: 'English',
    de: 'Deutsch',
}
const changeLanguage = (lang) => {
    setLocale(lang)
}

</script>

<template>
    <Dropdown>

        <template #trigger>

            <a class="px-3 py-2 mr-0 text-sm md:px-5 text-gray-500 font-medium sm:mr-3 md:mt-0 cursor-pointer font-bold">
                <LangFlag :iso="getLocale()" :title="__('locales.' + languages[getLocale()])" :squared="true"
                          class="rounded-[50%] mr-1"></LangFlag>
                {{ __('locales.' + languages[getLocale()]) }}
            </a>

        </template>

        <template #content>

            <DropdownLink @click="() => changeLanguage('en')">
                <LangFlag iso="en" :title="__('locales.English')" :squared="true"
                          class="rounded-[50%] mr-2"></LangFlag>
                {{ __('locales.English') }}
            </DropdownLink>

            <DropdownLink @click="() => changeLanguage('de')">
                <LangFlag iso="de" :title="__('locales.Deutsch')" :squared="true" class="rounded-[50%] mr-2"></LangFlag>
                {{ __('locales.Deutsch') }}
            </DropdownLink>

            <DropdownLink @click="() => changeLanguage('pl')">
                <LangFlag iso="pl" :title="__('locales.Polish')" :squared="true"
                          class="rounded-[50%]  mr-2"></LangFlag>
                {{ __('locales.Polish') }}
            </DropdownLink>

        </template>
    </Dropdown>
</template>

<style scoped>

</style>

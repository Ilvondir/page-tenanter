<script setup>
import LangFlag from 'vue-lang-code-flags';
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import {__, setLocale, getLocale} from "matice";

const locales = {
    pl: 'Polish',
    en: 'English',
    de: 'Deutsch',
}
const changeLanguage = (locale) => {
    localStorage.setItem('locale', locale)
    location.reload();
}

if (localStorage.getItem('locale')) {
    setLocale(localStorage.getItem('locale'));
}

</script>

<template>
    <Dropdown>

        <template #trigger>

            <a class="py-2 mr-0 text-sm md:px-5 text-gray-500 font-medium md:mt-0 cursor-pointer font-bold">
                <LangFlag :iso="getLocale()" :title="__('locales.' + locales[getLocale()])" :squared="true"
                          class="rounded-[50%] mr-1"></LangFlag>
                {{ __('locales.' + locales[getLocale()]) }}
            </a>

        </template>

        <template #content>
            <div class="text-left">
                <DropdownLink as="button" @click="() => changeLanguage('en')">
                    <LangFlag iso="en" :title="__('locales.English')" :squared="true"
                              class="rounded-[50%] mr-2"></LangFlag>
                    {{ __('locales.English') }}
                </DropdownLink>

                <DropdownLink as="button" @click="() => changeLanguage('de')">
                    <LangFlag iso="de" :title="__('locales.Deutsch')" :squared="true"
                              class="rounded-[50%] mr-2"></LangFlag>
                    {{ __('locales.Deutsch') }}
                </DropdownLink>

                <DropdownLink as="button" @click="() => changeLanguage('pl')">
                    <LangFlag iso="pl" :title="__('locales.Polish')" :squared="true"
                              class="rounded-[50%]  mr-2"></LangFlag>
                    {{ __('locales.Polish') }}
                </DropdownLink>
            </div>


        </template>
    </Dropdown>
</template>

<style scoped>

</style>

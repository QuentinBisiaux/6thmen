<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            </h2>
        </template>

        <div class="px-6 py-2">
            <div class="flex flex-wrap">
                <div class="md:w-1/2 sm:w-100 px-2" v-for="(teams, conference) in teamsByConf" :key="conference">
                    <h3 class="text-center text-3xl">{{conference}}</h3>
                    <hr class="w-1/2 mx-auto mb-2 border-orange-600">
                    <div v-for="(team, index) in teams" v-bind:key="team.id">
                        <div class="p-1 flex justify-around items-center rounded bg-white shadow mb-1">
                            <div class="text-2xl w-1/6 text-center">{{index + 1}}</div>
                            <div>
                                <img
                                    :src="'/img/NBATeams/' + conference + '/' + team.tricode +'.png'"
                                    :alt="'Logo des ' + team.name"
                                    class="rounded"
                                    width="33"
                                    height="33"
                                />
                            </div>
                            <div class="ml-4 lg:hidden md:block">{{team.tricode}}</div>
                            <div class="lg:ml-2 hidden lg:block">{{team.name}}</div>
                            <WinLoss :team="team"></WinLoss>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout'
import WinLoss from "./WinLoss";

export default {
    components: {
        AppLayout,
        WinLoss
    },

    props: ['teams'],

    data() {
        return {
            teamsByConf: this.teams
        }
    },
}
</script>

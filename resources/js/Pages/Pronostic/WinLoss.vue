<template>
    <div class="flex ml-auto w-1/3 justify-space-between">
        <div class="flex nowrap w-1/2">
            <label class="flex nowrap w-1/2" :for="'wins' +teamProno.id">W<span class="hidden lg:block">ins </span>:</label>
            <div class="w-1/2 mr-2">
                <input
                    type="number"
                    :name="'wins' + teamProno.id"
                    :id="'wins' + teamProno.id"
                    min="0"
                    max="72"
                    class="w-full text-center"
                    :value="wins"
                    v-on:change="equilibrate"
                >
            </div>
        </div>
        <div class="flex nowrap w-1/2">
            <label class="flex nowrap w-1/2" :for="'loses' +teamProno.id">L<span class="hidden lg:block">oses </span>:</label>
            <div class="w-1/2 mr-2">
                <input
                    type="number"
                    :name="'loses' + teamProno.id"
                    :id="'loses' + teamProno.id"
                    class="w-full text-center"
                    :value="loses"
                    v-on:change="equilibrate"
                >
            </div>
        </div>
    </div>
</template>

<script>

export default {
    components: {},
    props: ['team'],
    data() {
        return {
            teamProno: this.team,
            wins: 0,
            loses: 72
        }
    },
    methods: {
        equilibrate(event){
            var value = event.target.value;
            if (value > 72) {
                event.target.value = 72;
                value = 72;
            }
            if (value < 0) {
                event.target.value = 0;
                value = 0;
            }

            var result = event.target.name.replace(/[0-9]/g, '');
            if(result === 'wins') {
                this.wins = value
                this.loses = 72 - value;
            } else if (result === 'loses') {
                this.loses = value;
                this.wins = 72 - value;
            }
        }
    }
}
</script>

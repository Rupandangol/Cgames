<template>
    <div>
        <div class="row">
            <div class="col">
                <br>
                <img height="150px" src="/images/game/hangman.jpg" alt="image">
                <h2>Hangman Style</h2>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="row m-1">
                    <label class="col-sm-3 font-weight-bold text-right"><i class="fa fa-edit"></i> Word : </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control text-center" v-model="hangman.word"
                               placeholder="Type the hang word here!"
                               required>
                    </div>
                </div>
                <div class="row m-1">
                    <label class="col-sm-3 font-weight-bold text-right"><i class="fa fa-exclamation"></i> Hint :
                    </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control text-center" v-model="hangman.hint">
                    </div>
                </div>
                <div class="row m-1">
                    <label class="col-sm-3 font-weight-bold text-right"><i class="fa fa-chance"></i> Chance : </label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" v-model="hangman.chance">
                    </div>
                    <div class="col-sm-5">
                        <i>(chance ranges 4-7)</i>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <router-link to="/play" class="btn btn-primary btn-lg">Play</router-link>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                hangman: ''
            }
        },
        methods: {
            assignWord: function () {
                this.hangman = server;
            }
        },
        mounted() {
            this.assignWord();
        }
    }
</script>

<style>
</style>
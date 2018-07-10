<template>
    <div>
        <div class="row">
            <div class="col">
                <br><br><br>
                <img height="150px" src="/images/game/tictactoe.jpg" alt="">
                <h2>Tic Tac Toe</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 ml-5 mr-5">
                <i class="fa fa-user"> Enter player 1 name</i>
                <input type="text" v-model="player1" v-on:change="editName(1)" class="form-control">
            </div>
            <div class="col-sm-4 ml-5 mr-5">
                <i class="fa fa-user"> Enter player 2 name</i>
                <input type="text" v-model="player2" v-on:change="editName(2)" class="form-control">
            </div>
        </div>
        <br>
        <router-link to="/play" class="btn btn-primary btn-lg">Play</router-link>
        <br>
        <br>
        <router-link to="/score" class="btn btn-warning btn-lg">Scoreboard</router-link>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                player1: serverPlayer.name1,
                player2: serverPlayer.name2
            }
        },
        methods: {
            editName: function (value) {
                var check = value;
                if (check == 1) {
                    serverPlayer.name1 = this.player1;
                } else if (check == 2) {
                    serverPlayer.name2 = this.player2;
                }
            }
        }
    }
</script>

<style>

</style>
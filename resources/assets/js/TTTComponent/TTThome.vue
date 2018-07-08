<template>
    <div>
        <div class="row">
            <div class="col">
                <br><br><br>
                <img height="150px" src="/images/game/tictactoe.jpg" alt="">
                <h2>Tic Tac Toe</h2>
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
            return {}
        },
        methods: {}
    }
</script>

<style>

</style>
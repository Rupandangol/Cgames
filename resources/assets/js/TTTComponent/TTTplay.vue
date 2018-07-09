<template>
    <div >
        <h1>Tic Tac Toe</h1>
        <br>
        <div class="game-table m-auto">
            <table class="table table-striped">
                <tr>
                    <td>{{table.a1}}</td>
                    <td>{{table.a2}}</td>
                    <td>{{table.a3}}</td>
                </tr>
                <tr>
                    <td>{{table.b1}}</td>
                    <td>{{table.b2}}</td>
                    <td>{{table.b3}}</td>
                </tr>
                <tr>
                    <td>{{table.c1}}</td>
                    <td>{{table.c2}}</td>
                    <td>{{table.c3}}</td>
                </tr>
            </table>

            <div>
                <br>
                <hr>
                <router-link to="/play" class="btn btn-danger mr-5">New game</router-link>
                <router-link to="/" class="btn btn-secondary ml-5">Back</router-link>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 text-success font-weight-bold">
                Player 1 <br>
                {{player.score1}}
            </div>
            <div class="col-sm-6 text-success font-weight-bold">
                Player 2 <br>
                {{player.score2}}
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                table: {
                    a1: '.', a2: '.', a3: '.',
                    b1: '.', b2: '.', b3: '.',
                    c1: '.', c2: '.', c3: '.'
                },
                player: {
                    score1: 0,
                    score2: 0
                }
            }
        },
        methods: {}
    }
</script>

<style>
    .game-table {
        width: 300px;
        height: 300px;
        background: white;
    }

    .game-table td {
        height: 100px;
        width: 100px;
        box-shadow: 4px 4px 10px grey;
    }
</style>
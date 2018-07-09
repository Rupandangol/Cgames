<template>
    <div>
        <h1>Tic Tac Toe</h1>
        <br>
        <div class="row">
            <div class="col-sm-8 order-sm-2">
                <div class="game-table m-auto">
                    <table class="table table-striped">
                        <tr>
                            <td v-on:click="tdClick('a1')">{{table.a1}}</td>
                            <td v-on:click="tdClick('a2')">{{table.a2}}</td>
                            <td v-on:click="tdClick('a3')">{{table.a3}}</td>
                        </tr>
                        <tr>
                            <td v-on:click="tdClick('b1')">{{table.b1}}</td>
                            <td v-on:click="tdClick('b2')">{{table.b2}}</td>
                            <td v-on:click="tdClick('b3')">{{table.b3}}</td>
                        </tr>
                        <tr>
                            <td v-on:click="tdClick('c1')">{{table.c1}}</td>
                            <td v-on:click="tdClick('c2')">{{table.c2}}</td>
                            <td v-on:click="tdClick('c3')">{{table.c3}}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-sm-2 order-sm-1 text-success font-weight-bold text-center pt-5">
                {{player.name1}} <br>
                {{player.score1}}
            </div>
            <div class="col-sm-2 order-sm-3 text-success font-weight-bold text-center pt-5">
                {{player.name2}} <br>
                {{player.score2}}
            </div>
        </div>
        <br>
        <hr>
        <div class="row">

            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <router-link to="/play" class="btn btn-danger mr-5">New game</router-link>
                <router-link to="/" class="btn btn-secondary">Back</router-link>
            </div>
            <div class="col-sm-3"></div>
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
                    name1: 'Player 1',
                    score1: 0,
                    name2: 'Player 2',
                    score2: 0
                },
            }
        },
        methods: {
            tdClick: function (value) {
                var tableval = value;
                if (tableval === 'a1')
                    this.table.a1 = 'x';
            }
        }
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
<template>
    <div>
        <h1>Tic Tac Toe</h1>
        <br>
        <div id="winMessageBlock" style="display:none;">
            <b class="text-danger">
                <i class="fa fa-gift fa-2x text-primary"></i>
                <input type="text" id="winMessage" readonly>
            </b>
            <br>
        </div>
        <b class="text-danger">
            <i class="fa fa-gamepad lead text-info" style="font-size: 20px"></i>
            <input type="text" id="message" readonly>
        </b>
        <div class="row">
            <div class="col-sm-8 order-sm-2">
                <div class="game-table m-auto">
                    <table class="table table-striped">
                        <tr>
                            <td @click="tdClick('a1')" id="a1">
                                <input type="text" :value="table.a1" class="text-center" readonly>
                            </td>
                            <td @click="tdClick('a2')" id="a2">
                                <input type="text" :value="table.a2" class="text-center" readonly>
                            </td>
                            <td @click="tdClick('a3')" id="a3">
                                <input type="text" :value="table.a3" class="text-center" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td @click="tdClick('b1')" id="b1">
                                <input type="text" :value="table.b1" class="text-center" readonly>
                            </td>
                            <td @click="tdClick('b2')" id="b2">
                                <input type="text" :value="table.b2" class="text-center" readonly>
                            </td>
                            <td @click="tdClick('b3')" id="b3">
                                <input type="text" :value="table.b3" class="text-center" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td @click="tdClick('c1')" id="c1">
                                <input type="text" :value="table.c1" class="text-center" readonly>
                            </td>
                            <td @click="tdClick('c2')" id="c2">
                                <input type="text" :value="table.c2" class="text-center" readonly>
                            </td>
                            <td @click="tdClick('c3')" id="c3">
                                <input type="text" :value="table.c3" class="text-center" readonly>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-sm-2 order-sm-1 text-success font-weight-bold text-center pt-5">
                <i class="fa fa-user"></i><br>
                {{player.name1}} <br>
                <b style="font-size: 30px;color:yellow">
                    {{player.score1}}
                </b>
            </div>
            <div class="col-sm-2 order-sm-3 text-success font-weight-bold text-center pt-5">
                <i class="fa fa-user"></i><br>
                {{player.name2}} <br>
                <b style="font-size: 30px;color:yellow">
                    {{player.score2}}
                </b>
            </div>
        </div>
        <br>
        <hr>
        <div class="row">

            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <button @click="reloadpage()" class="btn btn-danger mr-5">Reset Score !</button>
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
                    a1: '', a2: '', a3: '',
                    b1: '', b2: '', b3: '',
                    c1: '', c2: '', c3: ''
                },
                player: '',
                dots: {
                    dot1: 'X',
                    dot2: 'O',
                    count: 1
                },
            }
        },
        methods: {
            tdClick: function (id) {
                var check = $('#' + id + ' input');
                var play = '';

                if (check.val() == '') {
                    if (this.dots.count % 2 === 0) {
                        play = this.dots.dot1;
                        check.css({
                            color: 'green', 'text-shadow': '2px 2px 8px green'
                        });
                        $('#message').val(serverPlayer.name1 + '\'s move!');
                    }
                    else {
                        play = this.dots.dot2;
                        check.css({
                            color: 'red', 'text-shadow': '2px 2px 8px red'
                        });
                        $('#message').val(serverPlayer.name2 + '\'s move!');
                    }

                    check.val(play);
                    this.dots.count++;
                    // return false;
                }
                this.checkWin();
            },
            assignPlayer: function () {
                this.player = serverPlayer;
                $('#message').val(serverPlayer.name1 + '\'s move!');
            },
            resetTable: function () {
                this.table = {
                    a1: '', a2: '', a3: '',
                    b1: '', b2: '', b3: '',
                    c1: '', c2: '', c3: ''
                };
            },
            reloadpage: function () {
                this.resetTable();
                serverPlayer.score1 = 0;
                serverPlayer.score2 = 0;
            },
            checkWin: function () {
                var thisMain = this;
                var match = {
                    0: {0: 'a1', 1: 'a2', 2: 'a3'},
                    1: {0: 'b1', 1: 'b2', 2: 'b3'},
                    2: {0: 'c1', 1: 'c2', 2: 'c3'},
                    3: {0: 'a1', 1: 'b1', 2: 'c1'},
                    4: {0: 'a2', 1: 'b2', 2: 'c2'},
                    5: {0: 'a3', 1: 'b3', 2: 'c3'},
                    6: {0: 'a1', 1: 'b2', 2: 'c3'},
                    7: {0: 'c1', 1: 'b2', 2: 'a3'},
                };

                $.each(match, function (index, items) {
                    var playO = 0;
                    var playX = 0;

                    $.each(items, function (index, item) {
                        var check = $('#' + item + ' input');
                        if (check.val() === 'X') {
                            playX++;
                        } else if (check.val() === 'O') {
                            playO++;
                        }
                        if (playO === 3) {
                            serverPlayer.score1++;
                            $('#winMessageBlock').show();
                            $('#winMessage').val(serverPlayer.name1 + ' wins this match ! ');
                            thisMain.dots.count=1;
                            setTimeout(function () {
                                $('#winMessage').val(' ');
                                $('#winMessageBlock').hide();
                            }, 2000);
                        } else if (playX === 3) {
                            serverPlayer.score2++;
                            $('#winMessageBlock').show();
                            $('#winMessage').val(serverPlayer.name2 + ' wins this match ! ');
                            thisMain.dots.count=1;
                            setTimeout(function () {
                                $('#winMessage').val(' ');
                                $('#winMessageBlock').hide();
                            }, 2000);
                        }
                    });
                });
                var checkCount = this.dots.count;
                if (checkCount === 10) {
                    this.dots.count = 1;
                    this.resetTable();
                }
            }
        },
        created() {
            // this.assignPlayer();
        },
        mounted() {
            this.assignPlayer();
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

    .game-table input {
        height: 70px;
        width: 70px;
        border: none;
        font-size: 60px;
    }

    #message {
        border: none;
        background: transparent;
        color: orangered;
        font-weight: bold;
    }

    #winMessage {
        border: none;
        background: transparent;
        color: orangered;
        font-weight: bold;
    }
</style>
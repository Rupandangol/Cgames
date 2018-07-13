<template>
    <div>
        <div class="row">
            <div class="col-sm-4">
                <img class="hangman border" :src="image" alt="image">
                <br><br>
            </div>
            <div class="col-sm-8">
                <br>
                <h5 class="alert alert-warning">{{hangman.hint}}</h5>
                <hr>
                <div v-for="letter in wordArray" style="display:inline;">
                    <i class="hang-letter" v-if="checkSpace(letter)">&nbsp;&nbsp;</i>
                    <i class="hang-letter" v-else-if="checkWords(letter)">{{letter}}</i>
                    <i class="hang-letter" v-else> _ </i>
                </div>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <router-link to="/" class="btn btn-danger">New <br>Game !</router-link>
            </div>
            <div class="col-sm-9 text-center">
                <table>
                    <tr>
                        <td v-for="item in letterArray1">
                            <i :id='item' class="hang-answer btn btn-xs btn-info" v-on:click="populateAnswer(item)">{{item}}</i>
                        </td>
                    </tr>
                    <tr>
                        <td v-for="item in letterArray2">
                            <i :id='item' class="hang-answer btn btn-xs btn-info" v-on:click="populateAnswer(item)">{{item}}</i>
                        </td>
                    </tr>
                    <tr>
                        <td v-for="item in letterArray3">
                            <i :id='item' class="hang-answer btn btn-xs btn-info" v-on:click="populateAnswer(item)">{{item}}</i>
                        </td>
                    </tr>
                </table>
                <br>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                hangman: '',
                wordArray: '',
                letters1: 'a,b,c,d,e,f,g,h,i,j',
                letters2: 'k,l,m,n,o,p,q,r,s,t',
                letters3: 'u,v,w,x,y,z',
                letterArray1: '',
                letterArray2: '',
                letterArray3: '',
                count: '',
                answer: [],
                image: '',
                ind: 0,
                answerCount: ''
            }
        },
        methods: {
            assignWord() {
                this.hangman = server;
                this.wordArray = this.hangman.word.split('');
                var str = this.hangman.word;
                var stringsp = str.split(' ').join('');
                this.answerCount = $.unique(stringsp.split('')).length;
                this.letterArray1 = this.letters1.split(',');
                this.letterArray2 = this.letters2.split(',');
                this.letterArray3 = this.letters3.split(',');

                this.count = server.chance;
                this.image = "/images/hangman/hang-" + this.count + ".png";
            },
            checkWords(letter) {
                var cval = $.inArray(letter, this.answer);
                if (cval != '-1') {
                    return true;
                }
            }, checkSpace(letter) {
                if (letter == ' ') {
                    return true;
                }
            },
            populateAnswer(item) {
                this.answer += item;
                $('#' + item).addClass('disabled');
                var check = $.inArray(item, server.word);
                if (check == '-1') {
                    this.count--;
                    if (this.count < 1) {
                        $('.hang-answer').css({display: 'none'});
                        this.image = "/images/hangman/hang-loss.png";
                    } else {
                        this.image = "/images/hangman/hang-" + this.count + ".png";
                    }
                } else {
                    var countCheck = --this.answerCount;
                    if (countCheck == 0) {
                        this.image = "/images/hangman/hang-win.png";
                        $('.hang-answer').css({display: 'none'});
                    }
                }
            }
        },
        created() {
            this.assignWord();
        }
    }
</script>

<style>
    .hangman {
        padding: 20px;
        height: 320px;
        width: 150px;
        /*background: white;*/
    }

    .hang-letter {
        font-weight: bold;
        font-size: 30px;
        padding: 3px;
    }

    .hang-answer {

    }

    .disabled {
        display: none;
    }

</style>
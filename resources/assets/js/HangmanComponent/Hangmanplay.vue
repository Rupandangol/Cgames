<template>
    <div>
        <div class="row">
            <div class="col-sm-4">
                <p>change image on mistake</p>
                <img class="hangman" src="/images/hangman/hang-1.png" alt="image">
            </div>
            <div class="col-sm-8">
                <br>
                <hr>
                <div v-for="letter in wordArray" style="display:inline;">
                    {{letter}}
                </div>
                <hr>
            </div>
        </div>
        <div class="row">
            <table>
                <tr>
                   <td v-for="item in letterArray">{{item}}</td>
                </tr>
            </table>
        </div>
        <div>
            <router-link to="/" class="btn btn-secondary">Back</router-link>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                hangman: '',
                wordArray: '',
                letters: 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z',
                letterArray: ''
            }
        },
        methods: {
            assignWord() {
                this.hangman = server;
                this.wordArray = this.hangman.word.split('');
                this.letterArray = this.letters.split(',');
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

</style>
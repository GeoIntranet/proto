<template>
    <div>

        <div class="row ">
            <div class=" col-sm-12 col-md-12 col-lg-12 ">

                <!--Zone de recherche-->
                <form :class="isActive">
                    <input
                            autocomplete="off" name="search" v-model="search"
                            @click="inputfocus"
                            @keyup.esc="closeSearch"
                            @focus="inputfocus"
                            @blur="inputOutfocus"
                            @keyup.delete="emptySearch"
                            @keyup="autocomplete"
                            class="form-control col-12 search_euro"
                            type="text" placeholder="Recherche">
                </form>
                <!--FIN Zone de recherche-->

            </div>
        </div>

        <div class="row positionBar " id="scroll" :style="{display:activeComplete}">

            <!--Zone autocomplétion-->
            <div class="col-lg-12 col-sm-12 col-md-12 " >
                <div class="row" >
                    <div class="col-sm-12 col-md-12 col-lg-12 search_zone">
                        Dans la zone de recherche , ecrit <b>Zebra</b>
                    </div>
                </div>
            </div>
            <!--FIN Zone autocomplétion-->

        </div>

    </div>
</template>

<script>
    export default {
        data(){
            return {
                search: '',
                focus: false,
                activeComplete: 'none',
                hasData: false,
                data: {},
                errorSearch: '',
            }
        },
        computed: {
            isActive: function () {
                return {
                    'expend form-inline col-8 p-0': this.focus === true,
                    'expend form-inline col-5  p-0': this.focus === false,
                }
            },

        },

        methods: {
            clickSearch(){

            },
            closeSearch(){
                console.log('close');
                this.focus = false;
                this.activeComplete = 'none';
                this.resetData();
            },
            resetData(){
                this.hasData = false;
                this.search = '';
                this.data = {};
            },
            readyForSearch(){
                return this.search !== '' ? false : true;
            },
            inputfocus(){
                this.focus = true;
                this.activeComplete = '';
            },
            emptySearch(){
                if (this.search === '') {
                    this.resetData();
                }
            },
            inputOutfocus(){
                this.focus = false;
                this.activeComplete = 'none';
                this.resetData();
            },
            autocomplete(){
                if (this.search !== '') {

                    axios.post('/search', {
                        search: this.search,
                    })
                        .then((response) => {
                            this.hasData = true;
                            this.errorSearch = '';
                            this.data = response.data;
                        })
                        .catch((response) => {
                            this.hasData = true;
                            this.errorSearch = 'il y\'a un probleme lors de la recherche ';
                        });
                }
            }
        },
        mounted() {
        }
    }
</script>

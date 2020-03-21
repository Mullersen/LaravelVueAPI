<template>
    <h1>{{quote}}</h1>
</template>

<script>
export default {
    name: "Quote",
    mounted: function(){
        this.$root.$on('getQuote', this.generateQuote);
    },
    data: function(){
        return {
            quote : "Click to get quote",
        }
    },
    methods: {
        generateQuote: function(){
            let ajax = new XMLHttpRequest();
                let compData = this; // this changes the scope inside the following function. it makes sure we are referring to the vue oject, not the readystatechange
                ajax.onreadystatechange = function(){
                    if(ajax.status == 200 && ajax.readyState == 4){
                        let jsonData = JSON.parse(this.responseText).quote; //after parsing it, we want to immeditately access the value of quote in our newly parsed quote object.
                        //console.log(this.responseText);
                        compData.quote = jsonData; //reference to the vue object and its users array will become/change the data we are getting back from the ajax request to our db.
                        console.log(compData.quote);
                    } else if(this.readyState == 4){
                        compData.quote = "Error in getting that sweet Kanye quote";
                    };
                };
                ajax.open('GET',"/kanye-quote", true);
                    // we define the endpoint to mtach the endpoint in our router.
                ajax.send();
        }
    }
}
</script>

<style>

</style>

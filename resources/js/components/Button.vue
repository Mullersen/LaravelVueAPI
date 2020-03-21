<template>
  <button @click="sendRequest">GET KANYE QUOTE HERE NOW FAST</button>
</template>

<script>
export default {
    name: "Button",
    methods: {
        sendRequest: function(){
            this.$root.$emit('getQuote');
        }
    }
}
</script>

<style>

</style>

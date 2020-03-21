<template>
    <div class="card">
        <div class="card-body">
            <Button class="card-text" />
            <Quote class="card-title" />
        </div>
    </div>
</template>

<script>
import Button from './Button.vue'
import Quote from './Quote.vue'

    export default {
        name: "Root",
        components: {
            Button,
            Quote
        },
    }
</script>

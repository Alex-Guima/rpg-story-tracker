<script setup>

    defineProps(['title'])
    defineEmits(['update:title'])

</script>

<template>
    <div class="container">

        <div class="form-title">
            <input
            class="form-field"
            :type="text"
            :value="title"
            @input="$emit('update:title', $event.target.value)"
            >
        </div>

    </div>
</template>

<style>
    .form-field {
        box-sizing: border-box;

        display: flex;
        width: 25rem;
        height: 3rem;
        padding: 0.75rem 1rem;
        align-items: center;
        gap: 0.625rem;

        border-radius: 4px;
        border: 2px solid #D04B12;
        background: #FEE5C1;

        font-size: medium;

        
    }
</style>

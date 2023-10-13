<script setup>

    defineProps(['title'])
    defineEmits(['update:title'])

</script>

<template>
    <div class="container">

        <div>
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
        background: #FEE5C1;
        border-radius: 4px;
        font-size: medium;   
    }

    .form-field:focus {
        border: 2px solid #D04B12;
    }
</style>

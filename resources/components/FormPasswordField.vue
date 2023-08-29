<script setup>

    defineProps(['title'])
    defineEmits(['update:title'])

</script>


<template>
    <div class="form-title">
        <input
        class="form-field"
        type="password"
        :value="title"
        @input="$emit('update:title', $event.target.value)"
        />
    </div>

</template>

<style>

.form-field {
        box-sizing: border-box;

        display: flex;
        width: 400px;
        height: 48px;
        padding: 12px 16px;
        align-items: center;
        gap: 10px;

        border-radius: 4px;
        border: 2px solid #D04B12;
        background: #FEE5C1;

        font-size: medium;
    }

</style>
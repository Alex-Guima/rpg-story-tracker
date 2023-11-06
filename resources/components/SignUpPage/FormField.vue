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

<style scoped>
    .form-field {
        box-sizing: border-box;

        width: 400px;
        display: flex;
        padding: 12px 16px;
        align-items: center;
        gap: 10px;
        background: #FEE5C1;
        border-radius: 4px;
        font-size: medium;
    }

    .form-field:focus {
        border: 2px solid var(--orange-800);
    }
    .form-field:hover {
        border: 2px solid var(--orange-800);
    }
</style>

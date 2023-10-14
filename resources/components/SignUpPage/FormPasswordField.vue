<script setup>

    defineProps(['title'])
    defineEmits(['update:title'])

</script>


<template>
    <div>
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
        display: flex;
        padding: 12px 16px;
        align-items: center;
        gap: 10px;

        border-radius: 4px;
        background: #FEE5C1;

        font-size: medium;
        transition: 0.1s;
    }

    .form-field:focus {
        border: 2px solid var(--orange-800);
    }

    .form-field:hover {
        border: 2px solid var(--orange-800)
    }
</style>
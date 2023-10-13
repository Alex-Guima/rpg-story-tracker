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
        width: 25rem;
        height: 3rem;
        padding: 0.75rem 1rem;
        align-items: center;
        gap: 0.625rem;

        border-radius: 4px;
        background: #FEE5C1;

        font-size: medium;
        transition: 0.1s;
    }

    .form-field:focus {
        border: 2px solid var(--orange-800);
    }

    .form-field:hover {
        border: 2px solid var(--orange-500)
    }
</style>
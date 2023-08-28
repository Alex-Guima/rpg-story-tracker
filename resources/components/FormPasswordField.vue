<script setup>

    defineProps(['title'])
    defineEmits(['update:title'])

</script>


<template>
    <div class="form-title">
        <input
        type="password"
        :value="title"
        @input="$emit('update:title', $event.target.value)"
        />
    </div>

</template>

<script setup lang="ts">
// This is a persistent layout
// Include me with <template layout="default" />
</script>

<template>
	<slot />
    <script src="https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.15.0/maps/maps-web.min.js"></script>
    <script src="https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.15.0/services/services-web.min.js"></script>
</template>

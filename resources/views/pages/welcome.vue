<script setup lang="ts">
import Navigation from '@/views/components/Navigation.vue';
import Map from '@/views/components/Map.vue';

</script>

<template>
    <Navigation />
    <div class="text-white">{{$page.props.locations.length}}</div>
    <Map locations="{{$page.props.locations}}" />
</template>

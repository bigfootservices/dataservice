<script setup lang="ts">
import Navigation from '@/views/components/Navigation.vue';
import Map from '@/views/components/Map.vue';

</script>

<template>
    <Navigation />
    <div class="text-white">Below are all locations we currently have identified.  There are {{$page.props.locations.length}} pins in the map</div>
    <div class="text-white">There are also a further {{$page.props.notFound}} reports for us to add locations for</div>
    <Map locations="{{$page.props.locations}}" />
</template>

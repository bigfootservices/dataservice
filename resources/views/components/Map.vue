<template>
    {{$page.props.reports}}
    <GoogleMap api-key="AIzaSyCCm26MCZpqUFFY5-ubOrJj9-IeNDuhH4Q" style="width: 100%; height: 85vh" :center="center" :zoom="3">
        <Marker
            v-for="(location, i) in $page.props.locations"
            :options="{position: {lat: parseFloat(location.latitude), lng: parseFloat(location.longitude)}}"
            :key="i"
        >
            <InfoWindow :options="{ position: center }">
                <div>Latitude: {{location.latitude}}</div>
                <div>Longitude: {{location.longitude}}</div>
                <div v-if="location?.report?.observed">Observations: {{location.report.observed}}</div>
            </InfoWindow>
        </Marker>
    </GoogleMap>
</template>

<script>
import { defineComponent } from "vue";
import { GoogleMap, Marker, InfoWindow } from "vue3-google-map";

export default defineComponent({
    props: {
        reports: Array,
    },
    components: { GoogleMap, Marker, InfoWindow },
    setup() {
        const center = { lat: 40.689247, lng: -74.044502 };

        return { center };
    },
});
</script>

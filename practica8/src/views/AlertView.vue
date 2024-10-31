<template>
    <v-container :fluid=true>
        <h1 class="text-green-darken-4">Alerta</h1>
        <v-btn
        prepend-icon="mdi-bell-ring"
        color="indigo"
        rounded="xl"
        @click="alertState = true">Mostrar Alerta</v-btn>
        <br><br>
        <v-alert
        closable
        v-model="alertState"
        icon="mdi-information"
        title="Respueta"
        text="El producto ha sido guadado"
        type="info">
        </v-alert>

    </v-container>
</template>

<script>
export default{
    name: 'AlertView',
    data(){
        return{
            alertState: false
        }
    }
}
</script>

<style scoped>
</style>
<template>
    <v-container :fluid=true>
        <h1 class="text-green-darken-4">TABS</h1>
        <v-tabs
        v-model="tabs"
        bg-color="teal-darken-4">
        <v-tab value="1">tab 1</v-tab>
        <v-tab value="2">tab 2</v-tab>
        <v-tab value="3">tab 3</v-tab>
        </v-tabs>
        <v-window v-model="tabs">
            <v-window-item value="1">Contenido de Pesta;a 1</v-window-item>
            <v-window-item value="2">Contenido de Pesta;a 2</v-window-item>
            <v-window-item value="3">Contenido de Pesta;a 3</v-window-item>
        </v-window>
    </v-container>
</template>

<script>
export default{
    name: 'TabsView',
    data(){
        return{
            tabs: '1'
        }
    }
}
</script>

<style scoped>
</style>
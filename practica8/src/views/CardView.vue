<template>
  <v-container :fluid=true>
    <h1 class="text-green-darken-4">Card</h1>
    <v-row>
      <v-col>
        <v-card title="Mi titulo" color="dark" subtitle="Subtitulo" text="Texto"></v-card>
      </v-col>
      <v-col>
        <v-card>
          <v-img src="../assets/plane.png" height="100%" cover class="bg-indigo"></v-img>
          <v-card-title>Titulo</v-card-title>
          <v-card-subtitle>Subtitulo</v-card-subtitle>
          <v-card-text>
            Contenido de la tarjeta
          </v-card-text>
          <v-card-actions>
            <v-btn icon="mdi-heart" color="red"></v-btn>
            <v-btn icon="mdi-share" color="blue"></v-btn>
          </v-card-actions>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {
  name: 'CardView',
}
</script>

<style scoped>
</style>
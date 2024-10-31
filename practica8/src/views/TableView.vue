<template>
    <v-container :fluid=true>
        <h1 class="text-green-darken-4">Table</h1>
        <v-table hover>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Raisa</td>
                    <td>Ramirez</td>
                    <td><v-btn icon="mdi-pencil" size="x-small" color="indigo"></v-btn></td>
                </tr>
                <tr>
                    <td>Alejandra</td>
                    <td>Ramirez</td>
                    <td><v-btn icon="mdi-close" size="x-small" color="red"></v-btn></td>
                </tr>
            </tbody>
        </v-table>
    </v-container>
</template>

<script>
export default{
    name: 'TableView',
}
</script>

<style scoped>
</style>
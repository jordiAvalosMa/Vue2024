<template>
    <v-container fluid>
        <h1 class="text-purple-darken-2">Estudiantes</h1>
        <v-row>
            <v-col cols="4">
                <v-text-field label="Nombre" placeholder="Escriba su nombre" color="purple" clearable v-model="nombre">
                </v-text-field>
                <v-text-field label="Edad" placeholder="Escriba su edad" color="purple" clearable type="number" v-model="edad">
                </v-text-field>
                <v-btn block color="purple-darken-2" prepend-icon="mdi-check" @click="guardar">Guardar</v-btn>
            </v-col>
            <v-col>
                <v-card title="Equipo">
                    <v-card-text>
                        <v-btn color="red" append-icon="mdi-delete-forever" size="small" @click="eliminarTodo">
                            Borrar
                        </v-btn>
                        <v-table>
                            <thead>
                                <tr>
                                    <th>
                                        Nombre
                                    </th>
                                    <th>
                                        Edad
                                    </th>
                                    <th>
                                        Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                               <tr v-for="(persona, i) in equipo" :key="i">
                                <td>{{ persona.nombre }}</td>
                                <td>{{ persona.edad }}</td>
                                <td>
                                    <v-btn icon="mdi-delete" color="red" size="x-small" @click="eliminar(i)"></v-btn>
                                </td>
                               </tr>
                               <tr v-if="equipo.length === 0">
                               <td colspan="3">No hay estudiantes</td>
                            </tr>
                            </tbody>
                        </v-table>
                    </v-card-text>
                </v-card>
            </v-col>
        </v-row>
    </v-container>
</template>
<script>
export default{
    name: 'PersonaView',
    data(){
        return{
            nombre: '',
            edad: 0,
            equipo: []
        }
    },
    methods:{
        guardar(){
            let persona = {'nombre' : this.nombre, 'edad' : this.edad }
            this.equipo.push(persona)
            localStorage.setItem('equipo', JSON.stringify(this.equipo))
            this.nombre = ''
            this.edad = 0
        },
        leer(){
            let data = JSON.parse(localStorage.getItem('equipo'))
            if(data){
                this.equipo = data
            }
        },
        eliminar(i){
            this.equipo.splice(i,1)
            localStorage.setItem('equipo', JSON.stringify(this.equipo))
        },
        eliminarTodo(){
            localStorage.removeItem('equipo')
            this.equipo = []
        },
    },
    created(){
        this.leer()
    },
};
</script>
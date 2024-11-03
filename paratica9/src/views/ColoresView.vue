<template>
    <v-container fluid>
        <h1 class="text-purple-darken-2">
            Color
        </h1>
        <v-row>
            <v-col>
                <v-text-field label="Color" placeholder="Ingresa un color" color="purple" v-model="color"></v-text-field>
                <v-btn prepend-icon="mdi-check" color="purple-darken-2" block @click="agregarColor">Guardar color</v-btn>
            </v-col>
            <v-col>
                <v-card title="Color" color="deep-purple-lighten-4" :text="colorGuardado" v-if="colorGuardado!==''">
                    <v-card-actions>
                        <v-btn icon="mdi-delete" color="red" @click="eliminarColor"></v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
export default{
    name: 'ColoresView',
    data(){
        return{
            color: '',
            colorGuardado: ''
        }
    },
    methods:{
        agregarColor(){
            localStorage.setItem('color', this.color)
            this.leerColor()
            this.color = ''
        },
        leerColor(){
            let data = localStorage.getItem('color')
            if(data){
                this.colorGuardado = data
            } else{
                this.colorGuardado = ''
            }
        },
        eliminarColor(){
            localStorage.removeItem('color')
            this.leerColor()
        }
    },
    created(){
        this.leerColor()
    },
};
</script>
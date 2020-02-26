<!-- otra ruta -->
<template>
    <div class="container">
        <div class="row">
                <h2 class="col-md-8">Videos del curso 
                    ...
                </h2>
                <div class="col-md-4">
                    <a
                    href="../lecciones/video/create"
                    class="btn btn-success btn-lg "
                    >
                    Subir Nuevo Video&nbsp;<i class="fa fa-upload"></i>
                    </a> 
                </div>
        </div>
        <table class="table mt-2">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tema</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(item,index) in lecciones">
                <th scope="row">{{item.id}}</th>
                <td>{{item.name}}</td>
                <td>{{item.course.name}}</td>
                <td>
                    <a :href="'/lecciones/video/'+item.id+'/edit'" class="btn btn-primary" >Editar <i class="fa fa-edit"></i></a>
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                    <form>
                                            <div class="form-group">
                                              <label for="exampleFormControlInput1">Email address</label>
                                              <input type="email" class="form-control" :value="modeEdit.name" >
                                            </div>
                                            <div class="form-group">
                                              <label for="exampleFormControlSelect1">Example select</label>
                                              <select class="form-control" id="exampleFormControlSelect1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                              </select>
                                            </div>
                                            <div class="form-group">
                                              <label for="exampleFormControlSelect2">Example multiple select</label>
                                              <select multiple class="form-control" id="exampleFormControlSelect2">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                              </select>
                                            </div>
                                            <div class="form-group">
                                              <label for="exampleFormControlTextarea1">Example textarea</label>
                                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                    </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <button type="button" class="btn btn-primary" @click="GuardarEdit">Guardar Cambios</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    <button class="btn btn-danger" @click=eliminar(index)>
                    Eliminar
                    <i class="fa fa-trash"></i>
                    </button>
                </td>
            </tr>  
            </tbody>
        </table>
        <pre>{{$data}}</pre>
    </div>
</template>
<script>
export default {
    mounted(){
        axios.get('http://localhost:8000/lecciones/video').then(
            res=>{
                this.lecciones=res.data
                console.log(this.lecciones)
            }
        )
    },  
    data(){
        return{
            lecciones:[],
            video:[],
            modeEdit:[],
            hola:''
        }
    },
    // /lecciones/video/'+item.id
    methods:{
        edit(index){
            var item = this.lecciones[index]
            this.modeEdit=item
            console.log(item)
        },
        GuardarEdit(index){
            this.lecciones[index]=this.modeEdit[index]
            console.log("esto:",this.lecciones[index])
            console.log('si')
        },
        eliminar(index){
            var item=this.lecciones[index]
            var res = confirm('estas seguro que quieres eliminar?')
            if(res == true){
                axios.delete(`/lecciones/video/${item.id}`).then(()=>{
                this.lecciones.splice(index,1)
                console.log(item.id)
                });  
            }
            console.log(res)
        }
    }
}
</script>


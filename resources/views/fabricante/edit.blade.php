<div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
    @extends ('fabricante.master')

@section ('titulopagina')

@endsection

@section('contenido')
<h1>Modificación de datos de un fabricante</h1>
<br>
<br>
 <!-- Contact Section Form-->
 <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">

                    @if($errors->any())
                    @foreach($errors->all() as $error )
                    <div class ="alert alert-danger">
                                    {{$error}}
                                </div>
                    @endforeach
                    @endif
                    <br>
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" action="{{route('fabricantes.update',$fabricante->id)}}" method="post" >
                        @csrf
                        @method('PUT') 
                            <!-- TITULO input-->
                            <div class="form-floating mb-3">
                                <input class="form-control"  type="text" name="rs" data-sb-validations="required" value=" {{$fabricante->rs ?? old('rs')}}"/>
                                <label for="razon social">Razón social</label>
                                <!-- manera de mostrar el error CAMPO a campo del formulario <br>
                                @error('titulo')
                                <div class ="alert alert-danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </div> -->
                            <!-- AUTOR input-->
                            <div class="form-floating mb-3">
                                <input class="form-control"  type="text" name="direccion" data-sb-validations="required,email" value=" {{$fabricante->direccion ?? old('direccion') }}" />
                                <label for="email">Dirección</label>
                        
                            </div>
                            <!-- FECHA input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" name="telefono" data-sb-validations="required" value="{{$fabricante->telefono ?? old('telefono')}}"/>
                                <label for="phone">Teléfono de contacto</label>

                            </div>
                            
                            </div>
                            <!-- Message input-->
                            <!-- <div class="form-floating mb-3">
                                <textarea class="form-control" type="text"  style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">FECHA DE PUBLICACION</label>

                            </div> -->
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                           
                    
            
                        <!-- Submit Button-->
                            <button class="btn btn-primary" type="submit">Modificar fabricante</button>
                           



                        </form>
                    </div>
                    @endsection

</div>


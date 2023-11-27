@extends('admin.layout.crud')

@section('registers')
    <div class="register">
        <div class="modify-register">
            <div class="edit">
                <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"><title>pencil</title><path
                        d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" /></svg>
            </div>
            <div class="delete">
                <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"><title>delete</title><path
                        d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" /></svg>
            </div>
        </div>
        <div class="register-data">
            <ul>
                <li>Título</li>
                <li>Fecha</li>
                <li>Hora</li>
            </ul>
        </div>
    </div>
    <div class="register">
        <div class="modify-register">
            <div class="edit">
                <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"><title>pencil</title><path
                        d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" /></svg>
            </div>
            <div class="delete">
                <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"><title>delete</title><path
                        d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" /></svg>
            </div>
        </div>
        <div class="register-data">
            <ul>
                <li>Título</li>
                <li>Fecha</li>
                <li>Hora</li>
            </ul>
        </div>
    </div>
    <div class="register">
        <div class="modify-register">
            <div class="edit">
                <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"><title>pencil</title><path
                        d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" /></svg>
            </div>
            <div class="delete">
                <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"><title>delete</title><path
                        d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" /></svg>
            </div>
        </div>
        <div class="register-data">
            <ul>
                <li>Título</li>
                <li>Fecha</li>
                <li>Hora</li>
            </ul>
        </div>
    </div>
    <div class="register">
        <div class="modify-register">
            <div class="edit">
                <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"><title>pencil</title><path
                        d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" /></svg>
            </div>
            <div class="delete">
                <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"><title>delete</title><path
                        d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" /></svg>
            </div>
        </div>
        <div class="register-data">
            <ul>
                <li>Título</li>
                <li>Fecha</li>
                <li>Hora</li>
            </ul>
        </div>
    </div>
@endsection


@section('form')
    <div class="form-top">
        <div class="pestanas">
            <div class="pestana principal">
                <h2>Principal</h2>
            </div>
            <div class="pestana imagenes">
                <h2>Imágenes</h2>
            </div>
        </div>
        <div class="form-buttons">
            <div class="form-clear">
                <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"><title>broom</title><path
                        d="M19.36,2.72L20.78,4.14L15.06,9.85C16.13,11.39 16.28,13.24 15.38,14.44L9.06,8.12C10.26,7.22 12.11,7.37 13.65,8.44L19.36,2.72M5.93,17.57C3.92,15.56 2.69,13.16 2.35,10.92L7.23,8.83L14.67,16.27L12.58,21.15C10.34,20.81 7.94,19.58 5.93,17.57Z" /></svg>
            </div>
            <div class="form-save">
                <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"><title>content-save</title><path
                        d="M15,9H5V5H15M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 15,16A3,3 0 0,1 12,19M17,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7L17,3Z" /></svg>
            </div>
        </div>
    </div>
    <div class="form-inputs">
        <div class="form-element">
            <div class="form-label">
                <label>Título</label>
            </div>
            <form class="form-input">
                <input type="text">
            </form>
        </div>
        <div class="form-element">
            <div class="form-label">
                <label>Fecha</label>
            </div>
            <form class="form-input">
                <input type="text">
            </form>
        </div>
        <div class="form-element">
            <div class="form-label">
                <label>Hora</label>
            </div>
            <form class="form-input">
                <input type="time">
            </form>
        </div>
        <div class="form-element">
            <div class="form-label">
                <label>Fecha</label>
            </div>
            <div class="form-input">
                <input type="date">
            </div>
        </div>
        <div class="form-element">
            <div class="form-label">
                <label>Dirección</label>
            </div>
            <div class="form-input">
                <input type="text">
            </div>
        </div>
        <div class="form-element">
            <div class="form-label">
                <label>Precio</label>
            </div>
            <div class="form-input">
                <input type="number">
            </div>
        </div>
    </div>
@endsection

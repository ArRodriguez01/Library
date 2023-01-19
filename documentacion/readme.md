# Text Stories
> Libreria online 

## Pagina Principal

Aparece un fondo con el logo de la libreria y con 2 opciones para registrarse o iniciar sesion
## Usuario

Datos generales del usuario como nombre y un id

**Admin** Control total sobre el catalogo , usuarios y alquileres

**Cliente** Solo puede realizar alquiler de los libros 
## Catalogo
Datos del libro tales como autor , isbn , edición , titulo
## Alquiler 
El alquiler sera gratuito 
## Proposta de disseny d'entitats i dades
4 tablas 
Roles
  Id roles
  Rol
Users
  iduser
  nombre
  email
  password
  rol_id relacion con la tabala roles
Alquileres
  idalquiler
  ISBN  relacion con la tabla libros
  userid relacion con la tabla users
  fechaAlquiler
Catalogo
  ISBN
  titulo
  editorial
  edicion
  autor

## Tablas
Catalogo
Usuarios
Alquileres
Rol


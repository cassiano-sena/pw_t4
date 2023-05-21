# signup
from FastAPI import FastAPI, Depends, HTTPException, Body
from auth.auth_handler import signJW
@app.post("/api/signup", tags=["usuario"])
async def create_usuario_signup(usuario: schemas.UsuarioCreate = Body(...), db: Session
= Depends(get_db)):
    try:
        crud.create_usuario(db, usuario)
        return signJWT(usuario.email)
    except UsuarioException as cie:
        raise HTTPException(**cie.__dict__)

# login
@app.post("/api/login", tags=["usuario"])
async def user_login(usuario: schemas.UsuarioLoginSchema = Body(...), db: Session = 
Depends(get_db)):
    if crud.check_usuario(db, usuario):
        return signJWT(usuario.email)
    return {
        "error": "E-mail ou senha incorretos!"
    }

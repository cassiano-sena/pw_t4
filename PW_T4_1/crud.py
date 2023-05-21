def check_usuario(db: Session, usuario: schemas.UsuarioLoginSchema):
    db_usuario = db.query(models.Usuario).filter(models.Usuario.email == 
usuario.email).first()
    if db_usuario is None:
        return False
    return bcrypt.checkpw(usuario.senha.encode('utf8'), db_usuario.senha.encode('utf8'))

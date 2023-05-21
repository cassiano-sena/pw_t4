class UsuarioLoginSchema(BaseModel):
    email: str
    senha: str
    class Config:
        schema_extra = {
            "example": {
            "email": "x@x.com",
            "senha": "pass"
            }
        }

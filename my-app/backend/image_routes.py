from fastapi import APIRouter, UploadFile, File
from sqlalchemy import insert, select
from models import images
from database import engine
import shutil, os

router = APIRouter()
UPLOAD_DIR = "images"
os.makedirs(UPLOAD_DIR, exist_ok=True)

@router.post("/upload")
async def upload_image(file: UploadFile = File(...)):
    file_path = f"{UPLOAD_DIR}/{file.filename}"
    with open(file_path, "wb") as buffer:
        shutil.copyfileobj(file.file, buffer)

    url = f"/{file_path}"
    with engine.connect() as conn:
        conn.execute(insert(images).values(filename=file.filename, url=url))

    return {"url": url}

@router.get("/images")
def get_images():
    with engine.connect() as conn:
        result = conn.execute(select(images))
        return [dict(row._mapping) for row in result]

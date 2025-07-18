from fastapi import FastAPI
from fastapi.middleware.cors import CORSMiddleware
from database import engine, metadata
from image_routes import router as image_router
from fastapi.staticfiles import StaticFiles

app = FastAPI()

@app.get("/")
def read_root():
    return {"message": "Hello from FastAPI"}

app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],  # Or specify your React app's URL
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)

metadata.create_all(bind=engine)

app.mount("/images", StaticFiles(directory="images"), name="images")
app.include_router(image_router)

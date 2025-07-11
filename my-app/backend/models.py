from sqlalchemy import Table, Column, Integer, String
from database import metadata

images = Table(
    "images",
    metadata,
    Column("id", Integer, primary_key=True),
    Column("filename", String),
    Column("url", String),
)

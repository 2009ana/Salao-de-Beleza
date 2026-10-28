using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
using PetAdocaoApi.Data;
using PetAdocaoApi.Models;

var builder = WebApplication.CreateBuilder(args);

builder.Services.AddCors();

builder.Services.AddDbContext<AppDbContext>(options =>
{
    var connectionString =
        builder.Configuration.GetConnectionString("DefaultConnection");

    options.UseMySql(
        connectionString,
        ServerVersion.AutoDetect(connectionString)
    );
});

var app = builder.Build();

app.UseCors(policy =>
    policy.AllowAnyOrigin()
          .AllowAnyHeader()
          .AllowAnyMethod());

app.MapGet("/pets", async (AppDbContext db) =>
{
    return await db.Pets.ToListAsync();
});

app.MapGet("/pets/{id}", async (int id, AppDbContext db) =>
{
    var pet = await db.Pets.FindAsync(id);

    return pet is null
        ? Results.NotFound()
        : Results.Ok(pet);
});

app.MapPost("/pets", async (
    [FromBody] Pet pet,
    AppDbContext db) =>
{
    db.Pets.Add(pet);

    await db.SaveChangesAsync();

    return Results.Created($"/pets/{pet.id_pet}", pet);
});

app.MapPut("/pets/{id}", async (
    int id,
    [FromBody] Pet petAtualizado,
    AppDbContext db) =>
{
    var pet = await db.Pets.FindAsync(id);

    if (pet == null)
        return Results.NotFound();

    pet.nome = petAtualizado.nome;
    pet.especie = petAtualizado.especie;
    pet.idade = petAtualizado.idade;
    pet.pelagem = petAtualizado.pelagem;
    pet.sexo = petAtualizado.sexo;
    pet.status = petAtualizado.status;

    await db.SaveChangesAsync();

    return Results.Ok(pet);
});

app.MapDelete("/pets/{id}", async (
    int id,
    AppDbContext db) =>
{
    var pet = await db.Pets.FindAsync(id);

    if (pet == null)
        return Results.NotFound();

    db.Pets.Remove(pet);

    await db.SaveChangesAsync();

    return Results.Ok();
});

app.Run();
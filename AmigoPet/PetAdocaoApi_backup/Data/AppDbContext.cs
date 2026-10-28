using Microsoft.EntityFrameworkCore;
using PetAdocaoApi.Models;

namespace PetAdocaoApi.Data;

public class AppDbContext : DbContext
{
    public AppDbContext(DbContextOptions<AppDbContext> options)
        : base(options)
    {
    }

    public DbSet<Pet> Pets { get; set; }

    protected override void OnModelCreating(ModelBuilder modelBuilder)
    {
        modelBuilder.Entity<Pet>()
            .HasKey(p => p.id_pet);

        modelBuilder.Entity<Pet>()
            .ToTable("Pets");

        base.OnModelCreating(modelBuilder);
    }
}
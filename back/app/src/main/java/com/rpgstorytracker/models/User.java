package com.rpgstorytracker.models;

import java.util.UUID;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import lombok.Data;

@Data
@Entity
public class User {
  @Id
  @GeneratedValue(strategy = GenerationType.UUID)
  private UUID id;

  private String username;

  private String password;

  User() {
  }

  User(String username, String password) {
    this.username = username;
    this.password = password;
  }
}

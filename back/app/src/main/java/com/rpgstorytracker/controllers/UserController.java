package com.rpgstorytracker.controllers;

import java.util.List;
import java.util.UUID;

import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.rpgstorytracker.exceptions.UserNotFoundException;
import com.rpgstorytracker.models.User;
import com.rpgstorytracker.repositories.UserRepository;

/**
 * UserController
 */
@RestController
@RequestMapping("/users")
public class UserController {

  private final UserRepository userRepository;

  public UserController(UserRepository userRepository) {
    this.userRepository = userRepository;
  }

  @GetMapping("/users/{userId}")
  public User getUser(@PathVariable UUID userId) {
    return userRepository.findById(userId).orElseThrow(() -> new UserNotFoundException(userId));
  }

  @GetMapping("/users")
  public List<User> getAll() {
    return userRepository.findAll();
  }

  @PostMapping("/users")
  User newUser(@RequestBody User newUser) {
    return userRepository.save(newUser);
  }

  @PutMapping("/users/{userId}")
  User updateUser(@RequestBody User newUser, @PathVariable UUID userId) {
    return userRepository.findById(userId).map(user -> {
      user.setName(newUser.getName());
      user.setPassword(newUser.getPassword());
      return userRepository.save(user);
    }).orElseGet(() -> {
      newUser.setId(userId);
      return userRepository.save(newUser);
    });
  }

  @DeleteMapping("users/{userId}")
  public void deleteUser(@PathVariable UUID userId) {
    userRepository.deleteByID(userId);
  }
}

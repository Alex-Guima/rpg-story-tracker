package com.rpgstorytracker.repositories;

import java.util.UUID;

import org.springframework.data.jpa.repository.JpaRepository;
import com.rpgstorytracker.models.User;

public interface UserRepository extends JpaRepository<User, UUID> {

}

package com.rpgstorytracker.repositories;

import java.util.UUID;

import org.hibernate.mapping.List;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.repository.query.Param;
import org.springframework.stereotype.Repository;

import com.rpgstorytracker.models.User;

public interface UserRepository extends JpaRepository<User, UUID> {

}

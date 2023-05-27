package com.octaveMusicStore.octaveBackendApplication.respositories;

import com.octaveMusicStore.octaveBackendApplication.models.User;
import org.springframework.data.jpa.repository.JpaRepository;

public interface UserRepository extends JpaRepository<User,Integer> {
    User findByEmail(String userEmail);
}

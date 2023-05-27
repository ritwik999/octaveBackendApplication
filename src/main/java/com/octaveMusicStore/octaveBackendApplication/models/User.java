package com.octaveMusicStore.octaveBackendApplication.models;

import lombok.*;
import org.hibernate.annotations.CreationTimestamp;
import org.hibernate.annotations.UpdateTimestamp;

import javax.persistence.*;
import java.util.Date;

@Getter
@Setter
@NoArgsConstructor
@AllArgsConstructor
@Builder
@ToString
@Entity
@Table(name = "user")
public class User {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Integer id;

    @Column(nullable = false,length = 40)
    private String name;

    @Column(nullable = false,length = 70,unique = true)
    private String password;

    @Column(nullable = false,length = 40,unique = true)
    private String email;

    @Column(nullable = true,length = 10)
    private String phoneNumber;

    @CreationTimestamp
    Date createdAt;

    @UpdateTimestamp
    Date updatedAt;

    @Enumerated
    UserStatus userStatus;
}
